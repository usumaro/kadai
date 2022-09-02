SELECT
     
     NAME_ID,
     AVG(SCORE)
     
FROM 
     RESULT_TABLE
     
GROUP BY NAME_ID
    
ORDER BY AVG(SCORE) DESC;
          
          

