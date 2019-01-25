<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 5.1.6 or newer
 *
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright		Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @copyright		Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Postgre Database Adapter Class
 *
 * Note: _DB is an extender class that the app controller
 * creates dynamically based on whether the active record
 * class is being used or not.
 *
 * @package		CodeIgniter
 * @subpackage	Drivers
 * @category	Database
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/database/
 */
class CI_DB_postgre_driver extends CI_DB {

	var $dbdriver = 'postgre';

	var $_escape_char = '"';

	// clause and character used for LIKE escape sequences
	var $_like_escape_str = " ESCAPE '%s' ";
	var $_like_escape_chr = '!';

	/**
	 * The syntax to count rows is slightly different across different
	 * database engines, so this string appears in each driver and is
	 * used for the count_all() and count_all_results() functions.
	 */
	var $_count_string = "SELECT COUNT(*) AS ";
	var $_random_keyword = ' RANDOM()'; // database specific random keyword

	/**
	 * Connection String
	 *
	 * @access	private
	 * @return	string
	 */
	function _connect_string()
	{
		$components = array(
								'hostname'	=> 'host',
								'port'		=> 'port',
								'database'	=> 'dbname',
								'username'	=> 'user',
								'password'	=> 'password'
							);

		$connect_string = "";
		foreach ($components as $key => $val)
		{
			if (isset($this->$key) && $this->$key != '')
			{
				$connect_string .= " $val=".$this->$key;
			}
		}
		return trim($connect_string);
	}

	// --------------------------------------------------------------------

	/**
	 * Non-persistent database connection
	 *
	 * @access	private called by the base class
	 * @return	resource
	 */
	function db_connect()
	{
		return @pg_connect($this->_connect_string());
	}

	// --------------------------------------------------------------------

	/**
	 * Persistent database connection
	 *
	 * @access	private called by the base class
	 * @return	resource
	 */
	function db_pconnect()
	{
		return @pg_pconnect($this->_connect_string());
	}

	// --------------------------------------------------------------------

	/**
	 * Reconnect
	 *
	 * Keep / reestablish the db connection if no queries have been
	 * sent for a length of time exceeding the server's idle timeout
	 *
	 * @access	public
	 * @return	void
	 */
	function reconnect()
	{
		if (pg_ping($this->conn_id) === FALSE)
		{
			$this->conn_id = FALSE;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Select the database
	 *
	 * @access	private called by the base class
	 * @return	resource
	 */
	function db_select()
	{
		// Not needed for Postgre so we'll return TRUE
		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Set client character set
	 *
	 * @access	public
	 * @param	string
	 * @param	string
	 * @return	resource
	 */
	function db_set_charset($charset, $collation)
	{
		// @todo - add support if needed
		return TRUE;
	}

	// --------------------------------------------------------------------

	/**
	 * Version number query string
	 *
	 * @access	public
	 * @return	string
	 */
	function _version()
	{
		return "SELECT version() AS ver";
	}

	// --------------------------------------------------------------------

	/**
	 * Execute the query
	 *
	 * @access	private called by the base class
	 * @param	string	an SQL query
	 * @return	resource
	 */
	function _execute($sql)
	{
		$sql = $this->_prep_query($sql);
		return @pg_query($this->conn_id, $sql);
	}

	// --------------------------------------------------------------------

	/**
	 * Prep the query
	 *
	 * If needed, each database adapter can prep the query string
	 *
	 * @access	private called by execute()
	 * @param	string	an SQL query
	 * @return	string
	 */
	function _prep_query($sql)
	{
		return $sql;
	}

	// --------------------------------------------------------------------

	/**
	 * Begin Transaction
	 *
	 * @access	public
	 * @return	bool
	 */
	function trans_begin($test_mode = FALSE)
	{
		if ( ! $this->trans_enabled)
		{
			return TRUE;
		}

		// When transactions are nested we only begin/commit/rollback the outermost ones
		if ($this->_trans_depth > 0)
		{
			return TRUE;
		}

		// Reset the transaction failure flag.
		// If the $test_mode flag is set to TRUE transactions will be rolled back
		// even if the queries produce a successful result.
		$this->_trans_failure = ($test_mode === TRUE) ? TRUE : FALSE;

		return @pg_exec($this->conn_id, "begin");
	}

	// --------------------------------------------------------------------

	/**
	 * Commit Transaction
	 *
	 * @access	public
	 * @return	bool
	 */
	function trans_commit()
	{
		if ( ! $this->trans_enabled)
		{
			return TRUE;
		}

		// When transactions are nested we only begin/commit/rollback the outermost ones
		if ($this->_trans_depth > 0)
		{
			return TRUE;
		}

		return @pg_exec($this->conn_id, "commit");
	}

	// --------------------------------------------------------------------

	/**
	 * Rollback Transaction
	 *
	 * @access	public
	 * @return	bool
	 */
	function trans_rollback()
	{
		if ( ! $this->trans_enabled)
		{
			return TRUE;
		}

		// When transactions are nested we only begin/commit/rollback the outermost ones
		if ($this->_trans_depth > 0)
		{
			return TRUE;
		}

		return @pg_exec($this->conn_id, "rollback");
	}

	// --------------------------------------------------------------------

	/**
	 * Escape String
	 *
	 * @access	public
	 * @param	string
	 * @param	bool	whether or not the string will be used in a LIKE condition
	 * @return	string
	 */
	function escape_str($str, $like = FALSE)
	{
		if (is_array($str))
		{
			foreach ($str as $key => $val)
			{
				$str[$key] = $this->escape_str($val, $like);
			}

			return $str;
		}

		$str = pg_escape_string($str);

		// escape LIKE condition wildcards
		if ($like === TRUE)
		{
			$str = str_replace(	array('%', '_', $this->_like_escape_chr),
								array($this->_like_escape_chr.'%', $this->_like_escape_chr.'_', $this->_like_escape_chr.$this->_like_escape_chr),
								$str);
		}

		return $str;
	}

	// --------------------------------------------------------------------

	/**
	 * Affected Rows
	 *
	 * @access	public
	 * @return	integer
	 */
	function affected_rows()
	{
		return @pg_affected_rows($this->result_id);
	}

	// --------------------------------------------------------------------

	/**
	 * Insert ID
	 *
	 * @access	public
	 * @return	integer
	 */
	function insert_id()
	{
		$v = $this->_version();
		$v = $v['server'];

		$table	= func_num_args() > 0 ? func_get_arg(0) : NULL;
		$column	= func_num_args() > 1 ? func_get_arg(1) : NULL;

		if ($table
		 NULL && $v >U '8.1')
		{
			$sql='SELECT LA h LAt]p used F --------R'

	// -(elsele
		 NULL !& $v >U '8. func_ !& $v >U '8.1')
		{
0		$sql='SELECTeplacalntf(version(ted1) :;

ial_s
	var $(	var,	varF ---s
	">_liNULL,8. func_
			re$ring
	>_versionql);
		return @	$is-	>_vql);
_idow(urn @	$ECTeplacalntf(version(CURRsed 	varF --------R">_ldow->s
	)

	// -(elsele
		 NULL !& $v >	$sql='SE---s
	_ 'us '
		LIKE c NULL ol	whesubp @	$ECTeplacalntf(version(CURRsed 	varF --------R">_l NULL)

	// -(elsereturn TRUE;
		ted @pt_o		$esult_id);
	}

	// -// -($ring
	>_versionql);
		return @$is-	>_vql);
_idow(urn @str;
	}
dow->-----R/ --------------------------------------------------------------------

	/**
	 * Insert I"Cs is All" *
	 * If needeGeneramicaa rrat($sm- random kring
	 *
	 *e app ring d');
 * clas----needeng wirandomLIK
	 *
	 * @access	private c* @param	string
	 * @param	botring
	 */
	function escape_sl() and co	 NULL &{
				{table
		 NULL && ''	return TRUE;
		0	$str = pgring
	>_versionql);
		onnect_stng = "SELEC._prep_queryotng()identdomLrs('() is->rF . " FROM " ._prep_queryotng()identdomLrs(liNULL,8{
		, $v >,	{
		if)($table
		ql);
_i() >{
		re && 		return TRUE;
		0	$str = pgis-	>_vql);
_idow(urn @prep_quer tra)
	{
		//rn @str;
	}(lnt)}
dow->() is->/ --------------------------------------------------------------------

	/**
	 * Set clienhs-	 NULL *
	 * If needeGeneramicaa rrat($sm- random kring
	 *
	 *eightlpp cont NULL  'ussp thein fetcmed @access	private
	 * @return	sol	whethere@ren0----		//dom k" .prefix--	----scape_str($str() and {
			 *
>e_str($str() and {
			 *
>e_seeburn)
		{os-	 Na.--	--- WHERE and {
s-	 Nadbdriacces'"	, $v >,	{cape_str($str!nn_id) = AND>rF . " dbcape_sis->$key !8.1')
		{
_striAND>and {
			 * esca' " $val="okey !8.1'-------------R">slH_striAND>and {
			 * esca' " $val="oke NULL)

	/rRh AND>and {
			 * esca' " $val=l
		{
sca' NULsistent database connection
	-------------------------------------------------

	/**
	 * Begin Transaction
	 *
	 * @acce  7 =lst_m------/**
	 * BeSuUc;R*
>
		ret_all_resbdriacca/---------------*
>
		ein fetcmed @access	private
	 *
>
		rurn	sol	whethin fe=--	--whet."'
	/**
	 * Version number query string
	 *
	 * @access	public
	 * @return	string
	 */
	funcFiel------ND>and {
			 * esca' " $val=l
		{
sca' NULsistent daconnection
	----------N----------riev-------------------------

	/**
	 * Begin Transaction
	 *
	 * @acce  7 obj		retur--/**
	 * BeSfiel-_----et_all_riacca/---------------* co	 NU	--whet."-	 MIT 1
	/**
	 * Version number query string
	 *
	 * @access	public
	 * @return	string
	 */
	func';

err------sage-------------------------------	 * @acce  7 =lst_m------/**
	 * BeSerr--_---sage---------------e
		 NULerr--t for a length o	/**
	 * Version number query string
	 *
	 * @access	public
	 * @return	string
	 */
	func';

err------sage-/ @tod------------------------	 * @acce  7 sult_id);
	}

	// -----Serr--_/ @tod---------------''begin/commit/rollback the outermost ones
		if ($this->_trans_depth > 0)
		{
			return TRUE;
		}
ansathe INULL && ''---------TAPE 
	 *
	 * @access
	------t ro------------------------------------

	/**
	 * All" *
	 * If needeGeneramicaa rrat($sm- key !8.1 NULL && ''	ritem app ring d')ape_sieam
 * @link	las----needeng wiranritem	{
_striAthe string " FROM " .---d1 NULL && ''ll bei-------

	ng dGenpo'	ritem, '.'.ei--pe_str($stLIKE condition
-----------eam
 * @lin. $like);
			}'.',---------eam
 * @lin.'.',--item m k" ng
	>remove du = arrss
urn TRUg()
---e sdyd @clu
	/* TRUeam
 *k" ng-------eregke);
			}'/['.--------eam
 * @lin.']+/',---------eam
 * @lin, scape_chrforeach

	ng dGenpo'	ritem, '.'-pe_str($stLIKEe_str($val, --------eam
 * @lin.$like);
			}'.',---------eam
 * @lin.'.'.--------eam
 * @lin,--item .--------eam
 * @linR">_ldow->s
	)

	// ($val, --------eam
 * @lin.-item.--------eam
 * @linR">_ld
ng
	>remove du = arrss
urn TRUg()
---e sdyd @clu
	/* TRUeam
 *k" -------eregke);
			}'/['.--------eam
 * @lin.']+/',---------eam
 * @lin, scape_ch*
	 * Version number query string
	 *
	 * @access	public
	 * @return	string
	 */
	funcFrom T @ret---------TAPE 
	 *
	 * im = ai forgroups co	 N* @retuaconnerehe onse anfus-----

	about;
  ' "---ereced'SELretulinmony withathe stt r				$s---------------------

	/**
	 * Btyp-	 * @acce  7 typ-	 * --/**
	 * BeSfromat($sm- rt($sm---------------am	bool	wht($sm--eeding the  @retucific raht($sm--	{
_striAND>and im =od	}', ' -------s/**
	 * Affected Rows
	 *
	 * @access	public
	 * @return	integer
	 */
	function affected_rows()
	stttem	var $_		 * esca' " $val=l
		{
sca' NULsisiws()
	stabasefrom------uc = ------------------------------

	/**
	 * Begin Transaction
	 *
	 * @a
	 * Bfic rransaiws()
	keys	 * @a
	 * Bfic rransaiws()
	values
	 * If needeGeneramicaa rrat($sm- kiws()
	return T * @s,in a um----------------INSERT INTONU	--whet."-(".im =od	}', ' --* @sv >) VALUES-(".im =od	}', ' -- a um-- >)
	/**
	 * Version number query string
	 *
	 * @access	public
	 * @return	string
	 */
	funcows()
_ba---	stttem	var $_		 * esca' " $val=l
		{
sca' NULsisiws()
	stabasefrom------uc = -----------------------  ------

	/**
	 *   	stabase ansaction
	 *
	 * @a
	 *   	fic r e ansaiws()
	keys	 * @a
	 *   	fic r e ansaiws()
	values
	 * If need  Generamicaa rrat($sm- kiws()
_ba---	return T * @s,in a um----------------INSERT INTONU	--whet."-(".im =od	}', ' --* @sv >) VALUES-".im =od	}', ' -- a um--	/**
	 * Version number query string
	 *
	 * @access	public
	 * @return	string
	 */
	funcUpd----stttem	var $_		 * esca' " $val=l
		{
sca' NULsisupd----stabasefrom------uc = ------------------------------

	/**
	 * Begin Transaction
	 *
	 * @a
	 * Bfic rransaupd------------@a
	 * Bfic rransawnereheignit----@a
	 * Bfic rransaorderbyheignit----@a
	 * Bfic rransa--scapeignit----@af needeGeneramicaa rrat($sm- kupd---	return T  a um- T wnere T orderbyhcific ra)on esng
	 *
	 *eightlppthe string a um-atabase'	=> 'dbname',
			'dbnon
	returse'."-=NU	-dbnueryotng()esng
	 *-----esng
 to '' : '-	 MIT '.-esng
---

	orderbyhci(	stri(	orderby) : N1)?' ORDER BY '.im =od	}", " T orderby):''---

	cont NUUPDATENU	--whet."-SET-".im =od	}', ' -- a 			foreac
			 *
>( wneretr($st_seeb	stri(	wnere) : 1 to "urn	sol".im =od	}" " T wnere) : ''---

	cont*
> orderby.-esng
---

ND>and {
			 * esca' " $val="okey !8.1'-------------R">slH_striAND>and {
			 * esca' " $val="oke NULTrat(----stttem	var $_		 * esca' " $val=l
		{
sca' NULsistrat(----stabasefrom------uc = -----------begin/coconn_id, does-----ccess	pun tranat(---() ol
	t r-----TAPE 
	 *
	 * maps to "D---TENco	 N* @re"-----------------------

	/**
	 * Begin Transaction
	 *
	 * @acce  7 =lst_m------/**
	 * BeSanat(---(t_all_riacca/--------TRUNCATENU	--whet	 * esca' " $val="okey !8.1'-------------R">slH_striAND>and {
			 * esca' " $val="oke NULDele---stttem	var $_		 * esca' " $val=l
		{
sca' NULsisdele---stabasefrom------uc = ------------------------------

	/**
	 * Begin Transaction
	 *
	 * @a
	 * Bfic rransawnereheignit----@a
	 * Begin Transa--scapeignit----@af needeGeneramicaa rrat($sm- kdele--	return T wnerehcific ra)on eskehcific ra)on esng
	 *
	 *eightlpp  => $val)sresbdm k" .pre	stri(	wnere) : 0 ORb	stri(	escapenabled)
		{
  => $val)sres"\nrn	sol";		{
  => $val)sr*
>im =od	}"\n",--------ar_wnere)m k" n.pre	stri(	wnere) : 0 &&b	stri(	escapenabled)> 'password $val)sr*
>e_seeb"_chrforea
  => $val)sr*
>im =od	}"\n",--escape_stotng()esng
	 *-----esng
 to '' : '-	 MIT '.-esng
---

--------D---TENco	 NU	--whet.  => $val)s.-esng
--* esca' " $val="okey !8.1'-------------R">slH_striAND>and {
			 * esca' " $va="oke NULLsng
	---------------esca' " $val=l
		{
sca' NULsis	 MIT eignit-----------------------

	/**
	 * Begin Transacont----------------**
	 * Bsult_idransa/ @todoofcharacto esng
	----------to----**
	 * Bsult_idransaoffuter a um	 * @acce  7 =lst_m------/**
	 * BeSuU----{
		on esng
 T offuteightlpp cont*
>e	 MIT ".-esng
---

ng d'offuternabled)
		{
 			 *
>e_OFFSET-".'offute	{
_striAND>and {
			 * esca' " $val="okey !8.1'-------------R">slH_striAND>and {
			 * esca' " $val="oke NULClod, DBunctions.
	-----------------------

	/**
	 * B------------tablish the db connection if _clod, as $k_i----
		{-perslod, as $k_i--	 * es
 es
/* Endoofcogy  @subpackage	Dr.eturonn/* Loarray(: ./system* @packageage	Drs/@subpac/@subpackage	Dr.eturon