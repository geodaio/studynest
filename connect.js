//https://www.cockroachlabs.com/blog/full-stack-node-app/

window.onload = function () {
  const Sequelize = require("sequelize-cockroachdb");
  
  const fs = require("fs");
  
  var sequelize = new Sequelize({
    dialect: "postgres",
    username: "geodaio",
    password: env.PASSWORD,
    host: "study-nest-12836.7tt.cockroachlabs.cloud",
    port: 26257,
    database: "defaultdb",
    dialectOptions: {
      ssl: {
        ca: fs.readFileSync(env.CERT).toString();
      },
    },
    logging: false,
  });
  
  app.listen(port, host, () =>{
    console.log("Server started at ${host} port ${post}");
  })
};
