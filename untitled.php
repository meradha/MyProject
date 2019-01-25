<?php
	function text
	{
		// $paper_id = $_POST['paper_id'];
		// $child_id = $_POST['child_id'];
		$paper_id =1;
		$child_id = 1;

		// $checkPaperId = $this->cm->getData('*','tbl_child_answer',array('paper_id'=>$paper_id));
		$checkPaperId = 1;
		if (!empty($checkPaperId))
		{
			$join_arr 	= array('tbl_questions b'=>['cond'=>'b.paper_id=a.id' , 'type'=>'inner']);
			$where_array  = array('where' => array('a.id'=>$paper_id , 'a.status'=>1));
			$questionList = $this->cm->getDataV2('*','tbl_papers a' , $join_arr , $where_array);
			foreach ($questionList as $queList) 
			{
				$checkQuestionId = $this->cm->getData('*','tbl_child_answer',array('question_id'=>$queList->id));
				if (empty($checkQuestionId))
				{
					if(!empty($questionList))
					{
						echo json_encode(array('status'=>'1','questionList'=>$questionList));
					}
					else
					{
						echo json_encode(array('status'=>'0',"question"));
					}
				}
				else
				{
					echo json_encode(array('status'=>'1',"go to result"));
				}
			}

			if(!empty($questionList))
			{
				echo json_encode(array('status'=>'1','questionList'=>$questionList));
			}
			else
			{
				echo json_encode(array('status'=>0));
			}
		}
		else
		{
			$select = 'paper_terms';
			$instruction = $this->cm->getData('$select','tbl_papers',array('id'=>$paper_id));
			if (!empty($instruction)) 
			{
				
			}
			else
			{

			}
		}
	}
?>