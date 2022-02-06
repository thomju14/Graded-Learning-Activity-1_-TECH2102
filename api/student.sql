CREATE TABLE `student` (
`ID` int(11) NOT NULL,
`student_name` varchar(30) NOT NULL,
`student_number` int(11) NOT NULL,
`student_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `student`
DELETE PRIMARY KEY (`ID`) VALUES('59');


INSERT INTO `students`.`student` (`ID`, `student_name`, `student_number`, `student_age`) VALUES ('21', 'Mark', '23422', '30');