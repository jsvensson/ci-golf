# SQL queries

Select non-members of a group

    SELECT id, username
      FROM User U
      LEFT JOIN UserGroups UG
        ON (UG.user_id = U.id)
      WHERE UG.group_id != 4
        OR UG.group_ID IS NULL

Create stored procedure of above:

    DROP PROCEDURE IF EXISTS `get_nonmembers_of_group`;
    DELIMITER //
     CREATE PROCEDURE get_nonmembers_of_group(IN iGroupId INT)
        BEGIN
          SELECT id, username
            FROM User U
            LEFT JOIN UserGroups UG
              ON (UG.user_id = U.id)
            WHERE UG.group_id != iGroupId
              OR UG.group_ID IS NULL;
        END//
     DELIMITER ;
