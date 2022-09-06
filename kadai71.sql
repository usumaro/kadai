UPDATE

NAME_TABLE

SET
RANK='D'

where name_id in( 
    
select name_id
    
from result_table
    
where PLAYDATE <> DATE_SUB(CURDATE(), INTERVAL 1 month)	
    
group by name_id
