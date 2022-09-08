UPDATE
     RESULT_TABLE
     
SET  score=score-3
      

where 
      name_id in(
           
           select name_id
           from name_table
           where rank='A')
          
           
          ;
           
           
           
           
        
