import pandas as pd
import mysql.connector


faile = "ForSite.csv"

credentials = dict(user='root', password='dit_site', database='dit_site_bd', host='localhost')
connection = mysql.connector.connect(**credentials)
cursor = connection.cursor(prepared=True)

df = pd.read_csv(faile, sep=";", encoding = "utf-8") 

query = 'DROP TABLE IF EXISTS t2;'
cursor.execute(query)
query = 'CREATE TABLE t2 ('
query += ','.join('`{}` TEXT'.format(column) for column in df.columns)
query += ') CHARACTER SET utf8 COLLATE utf8_unicode_ci;'
cursor.execute(query)
cursor.close()

cursor = connection.cursor()
query = "LOAD DATA LOCAL INFILE '/var/www/python/ForSite.csv' INTO TABLE t2 CHARACTER SET UTF8 FIELDS TERMINATED BY ';' ENCLOSED BY '\"' LINES TERMINATED BY '\n' IGNORE 1 ROWS"

cursor.execute(query)
connection.commit()

cursor.close()
connection.close()

print("Ok")