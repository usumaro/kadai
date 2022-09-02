SELECT
    RESULT_TABLE.NAME_ID, 
    NAME_TABLE.NAME,
    RESULT_TABLE.SCORE,
    RESULT_TABLE.TIME
     
FROM 
     RESULT_TABLE
     JOIN
     NAME_TABLE
     ON  RESULT_TABLE.NAME_ID=NAME_TABLE.NAME_ID

  
ORDER BY RESULT_TABLE.NAME_ID;