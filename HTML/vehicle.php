CREATE TABLE vehicle(
	vehicleID INT PRIMARY KEY,
    userID VARCHAR(500),
    FOREIGN KEY (userID) REFERENCES users(userID)
)