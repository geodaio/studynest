const { Pool, Client } = require("pg");

const connectionString = "postgresql://geodaio"+${{ env.PASSWORD }}+"study-nest-12836.7tt.cockroachlabs.cloud:26257/defaultdb?sslmode=verify-full&sslrootcert="+${{ env.CERT }}+"&options=--cluster%3Dstudy-nest";

const pool = new Pool ({connectionString});


