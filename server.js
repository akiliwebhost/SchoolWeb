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
            "INSERT INTO signatures (full_name, Email, goal_date) VALUES ('Bishop', 'Bishop@akiliuniverse.org,', '5/21/2005')"
        );

        console.log("inserted");
    } catch (e) {
        console.log(e);
    }
};

insertIntoDb();