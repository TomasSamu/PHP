SELECT *
FROM `country`;


/* limit is offset - skip the first x items */
SELECT *
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 11, 10;


SELECT `Name`, `Continent`
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 0, 10;

INSERT 
INTO `region`
(`name`,`slug`)
VALUES
('Eastern Europe' , 'eastern-europe');

INSERT
INTO `region`
(`name`, `slug`)
VALUES
('Western Europe', 'western-europe');

INSERT
INTO `region`
(`name`, `slug`)
VALUES
('North America', 'north-america'),
('Central America', 'central-america'),
('South America', 'south-america');

UPDATE `city`
SET `Name` = 'Prague'
WHERE `id` = 3339;

UPDATE `city`
SET `Population` = 1294513
WHERE `id` = 3339;

Update `country`
SET `HeadOfState` ='Donald J. Trump'
WHERE `GovernmentForm` = 'US Territory';


Update `country`
SET `HeadOfState` ='Donald J. Trump'
WHERE `HeadOfState` ='George W. Bush';
