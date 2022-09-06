UPDATE name_table

set rank='A'


where

name_id in(

select name_id
from result_table
    
where  PLAYDATE>='2022-04-01' AND  PLAYDATE<='2022-04-30'

group by name_id       
