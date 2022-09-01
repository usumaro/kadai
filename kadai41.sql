SELECT

          RESULT_ID,

      CASE
          
           WHEN SCORE<11 THEN "ランクC"
           WHEN SCORE>10 AND SCORE<21 THEN "ランクB"
           WHEN SCORE>19  THEN  "ランクA"
           
          END
          
FROM RESULT_TABLE
;
