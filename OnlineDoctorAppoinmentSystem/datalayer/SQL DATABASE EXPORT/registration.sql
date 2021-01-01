

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `admin` (
  `AdminID` varchar(11) NOT NULL,
  `adminpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `bookapp` (
  `AppoID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `patientID` int(11) NOT NULL,
  `docID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `doctor` (
  `DoctorID` int(11) NOT NULL,
  `Doctorname` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `categorey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;







CREATE TABLE `patients` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ContactNumber` varchar(40) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Bloodtype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `admin`
  ADD UNIQUE KEY `AdminID` (`AdminID`);


ALTER TABLE `bookapp`
  ADD PRIMARY KEY (`AppoID`),
  ADD UNIQUE KEY `Time` (`Time`),
  ADD KEY `patientoapp` (`patientID`),
  ADD KEY `doctopatient` (`docID`);


ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DoctorID`);




ALTER TABLE `patients`
  ADD PRIMARY KEY (`UserID`);


ALTER TABLE `bookapp`
  MODIFY `AppoID` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `doctor`
  MODIFY `DoctorID` int(11) NOT NULL AUTO_INCREMENT;




ALTER TABLE `patients`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;


ALTER TABLE `bookapp`
  ADD CONSTRAINT `doctopatient` FOREIGN KEY (`docID`) REFERENCES `doctor` (`DoctorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `patientoapp` FOREIGN KEY (`patientID`) REFERENCES `patients` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

