SELECT

          QUESTION,

      CASE
          
           WHEN LEVEL<3 THEN "簡単"
           WHEN LEVEL>2 AND LEVEL<5 THEN "普通"
           WHEN LEVEL>4  THEN  "難しい"
           
          END
          
FROM QUESTION_TABLE
;
