SELECT
    NAME_ID,
    PLAYDATE, 
     SUM(TIME)
      
FROM

    RESULT_table
    
    
GROUP BY  NAME_ID,
          PLAYDATE;

