if(advance_data_tbl != undefined && advance_data_tbl == 1)
{
  loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
    loadScript(plugin_path + "datatables/js/dataTables.tableTools.min.js", function(){
      loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){
        loadScript(plugin_path + "select2/js/select2.full.min.js", function(){

          var table = jQuery('#sample_1');

          /* Table tools samples: https://www.datatables.net/release-datatables/extras/TableTools/ */

          /* Set tabletools buttons and button container */

          jQuery.extend(true, jQuery.fn.DataTable.TableTools.classes, {
            "container": "btn-group pull-right tabletools-topbar",
            "buttons": {
              "normal": "btn btn-sm btn-default",
              "disabled": "btn btn-sm btn-default disabled"
            },
            "collection": {
              "container": "DTTT_dropdown dropdown-menu tabletools-dropdown-menu"
            }
          });

          var oTable = table.dataTable({
            "order": [
              [0, 'asc']
            ],
            
            "lengthMenu": [
              [10,20,30,40,50,60,70,80,90,100, -1],
              [10,20,30,40,50,60,70,80,90,100, "All"] // change per page values here
            ],
            // set the initial value
            "pageLength": 10,

            "dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>", // horizobtal scrollable datatable

            "tableTools": {
              "sSwfPath": plugin_path + "datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf",
              "aButtons": [{
                "sExtends": "pdf",
                "sButtonText": "PDF"
              }, {
                "sExtends": "csv",
                "sButtonText": "CSV"
              }, {
                "sExtends": "xls",
                "sButtonText": "Excel"
              }, {
                "sExtends": "print",
                "sButtonText": "Print",
                "sInfo": 'Please press "CTR+P" to print or "ESC" to quit',
                "sMessage": "Generated by DataTables"
              }]
            }
          });

          var tableWrapper = jQuery('#sample_1_wrapper'); 
          // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper

          tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown

        });
      });
    });
  });

  $(function () {
    loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
      loadScript(plugin_path + "datatables/js/dataTables.tableTools.min.js", function(){
        loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){
          loadScript(plugin_path + "select2/js/select2.full.min.js", function(){

            jQuery('#web_view_tbl').dataTable({
                  "paging": true,
                  "lengthChange": false,
                  "searching": false,
                  "ordering": true,
                  "info": true,
                  "autoWidth": false,
                  "scrollX": true
            });
          });
        });
      });
    });     
  });
}else if(advance_tbl != undefined && advance_tbl == 1){
  loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
    loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){

      if (jQuery().dataTable) {

        var table = jQuery('#datatable_sample');
        table.dataTable({
          "columns": [{
            "orderable": false
          }, {
            "orderable": true
          }, {
            "orderable": false
          }, {
            "orderable": false
          }, {
            "orderable": true
          }, {
            "orderable": false
          }],
          "lengthMenu": [
            [5, 15, 20, -1],
            [5, 15, 20, "All"] // change per page values here
          ],
          // set the initial value
          "pageLength": 10,            
          "pagingType": "bootstrap_full_number",
          "language": {
            "lengthMenu": "  _MENU_ records",
            "paginate": {
              "previous":"Prev",
              "next": "Next",
              "last": "Last",
              "first": "First"
            }
          },
          "columnDefs": [{  // set default column settings
            'orderable': false,
            'targets': [0]
          }, {
            "searchable": false,
            "targets": [0]
          }],
          "order": [
            [1, "asc"]
          ] // set first column as a default sort by asc
        });

        var tableWrapper = jQuery('#datatable_sample_wrapper');

        table.find('.group-checkable').change(function () {
          var set = jQuery(this).attr("data-set");
          var checked = jQuery(this).is(":checked");
          jQuery(set).each(function () {
            if (checked) {
              jQuery(this).attr("checked", true);
              jQuery(this).parents('tr').addClass("active");
            } else {
              jQuery(this).attr("checked", false);
              jQuery(this).parents('tr').removeClass("active");
            }
          });
          jQuery.uniform.update(set);
        });

        table.on('change', 'tbody tr .checkboxes', function () {
          jQuery(this).parents('tr').toggleClass("active");
        });

        tableWrapper.find('.dataTables_length select').addClass("form-control input-xsmall input-inline"); // modify table per page dropdown

      }

    });
  });
}else{
  loadScript(plugin_path + "datatables/js/jquery.dataTables.min.js", function(){
    loadScript(plugin_path + "datatables/js/dataTables.tableTools.min.js", function(){
      loadScript(plugin_path + "datatables/js/dataTables.colReorder.min.js", function(){
        loadScript(plugin_path + "datatables/dataTables.bootstrap.js", function(){
          loadScript(plugin_path + "select2/js/select2.full.min.js", function(){
              var table = jQuery('#sample_5');
              /* Fixed header extension: http://datatables.net/extensions/keytable/ */
              var oTable = table.dataTable({
                 "order": [
                    [0, 'asc']
                 ],
                 "lengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                 ],
                 "pageLength": 10, // set the initial value,
                 "columnDefs": [{  // set default column settings
                    'orderable': false,
                    'targets': [0]
                 }, {
                    "searchable": false,
                    "targets": [0]
                 }],
                 "order": [
                    [1, "asc"]
                 ]           
              });
              var oTableColReorder = new jQuery.fn.dataTable.ColReorder( oTable );
              var tableWrapper = jQuery('#sample_6_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
              tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
          });
        });
      });
    });
  });
}

$("#msg_div").fadeOut(5000); 
$('.panel').fadeIn(1500);
function resetToDefaults() {
  topbar.config({
    autoRun      : true,
    barThickness : 3,
    barColors    : {
      '0'      : '#31708f',
      '.25'    : '#5bc0de',
      '.50'    : '#bce8f1',
      '.75'    : '#bce8f1',
      '1.0'    : 'blue'
    },
    shadowBlur   : 10,
    shadowColor  : 'gray'
  })
}
topbar.show()
resetToDefaults();
setTimeout(function() {
  $('body').fadeIn('slow');
  topbar.hide();
}, 1000);

function reloadTopBar()
{
  topbar.show()
  resetToDefaults();
  setTimeout(function() {
    $('body').fadeIn('slow');
    topbar.hide();
  }, 1000);
}


$(".checkNumFilter").keypress(function(r) {
  ((46 != r.which || -1 != $(this).val().indexOf(".")) && (r.which < 48 || r.which > 57) || 46 == r.which && 0 == $(this).caret().start) && r.preventDefault(), $(".checkNumFilter").keyup(function(r) {
      0 == $(this).val().indexOf(".") && $(this).val($(this).val().substring(1))
  })
});

function setNotificationMsg($msg , $type)
{
  _toastr($msg, "top-right" , $type,false);
}