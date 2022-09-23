CREATE DATABASE accounting;
CREATE ROLE accountingmanager LOGIN PASSWORD 'root';
ALTER DATABASE accounting OWNER TO accountingmanager;
\c accounting accountingmanager;