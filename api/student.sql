CREATE TABLE `student` (
`ID` int(11) NOT NULL,
`student_name` varchar(30) NOT NULL,
`student_number` int(11) NOT NULL,
`student_age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `student`
ADD PRIMARY KEY (`ID`);
