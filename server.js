const mysql = require("mysql2/promise");

const insertIntoDb = async () => {
    const connection = await mysql.createConnection({
        host: "sql5.freesqldatabase.com",
        user: "sql5508338",
        password: "P7e7UNjBqm",
        database: "sql5508338",
        port: 3306,
    });

    try {
        await connection.query(
            "INSERT INTO greatest_basketball_player_ever (player_name, team) VALUES ('Lebron James', 'Lakers')"
        );

        console.log("inserted");
    } catch (e) {
        console.log(e);
    }
};

insertIntoDb();