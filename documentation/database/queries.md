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
