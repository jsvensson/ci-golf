# SQL queries

## Select non-members of a group

    SELECT U.id, U.username
    FROM User U
    WHERE U.id NOT IN (
      SELECT UG.user_id from UserGroups UG
      WHERE group_id = 4
    );

Create stored procedure of above:

    DROP PROCEDURE IF EXISTS `get_nonmembers_of_group`;
    DELIMITER //
     CREATE PROCEDURE get_nonmembers_of_group(IN iGroupId INT)
        BEGIN
          SELECT U.id, U.username
          FROM User U
          WHERE U.id NOT IN (
            SELECT UG.user_id from UserGroups UG
            WHERE group_id = 4
          );
        END//
     DELIMITER ;

## View for group with member count

    DROP VIEW IF EXISTS Groups_With_Members;
    CREATE VIEW Groups_With_Members
      AS SELECT
        G.id AS id,
        G.name AS name,
        G.description AS description,
        SUM((CASE WHEN isnull(UG.user_id) THEN 0 ELSE 1 END)) AS member_count
      FROM Groups G
      LEFT JOIN UserGroups UG
        ON UG.group_id = G.id
      GROUP BY G.id, G.name;
