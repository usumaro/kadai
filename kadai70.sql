UPDATE
    name_table
SET
    rank = 'C'
WHERE
    name_id IN(
    SELECT
        name_id
    FROM
        result_table
    WHERE
        PLAYDATE >= '2022-04-01' AND PLAYDATE <= '2022-04-30'
    GROUP BY
        name_id
    HAVING
        AVG(score) <= 10
);

 
