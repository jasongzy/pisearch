import datetime
import sqlite3

from pisearch import get_digits, search_in_Pi


def dateRange(start, end, step=1, format=r"%Y%m%d"):
    strptime, strftime = datetime.datetime.strptime, datetime.datetime.strftime
    days = (strptime(end, format) - strptime(start, format)).days
    return [
        strftime(strptime(start, format) + datetime.timedelta(i), format)
        for i in range(0, days, step)
    ]


conn = sqlite3.connect(r"data/pi.db")
c = conn.cursor()

c.execute(
    """CREATE TABLE BIRTHDAY
       (DATE      INT PRIMARY KEY,
        POSITION  INT UNIQUE);"""
)

date_list = dateRange("19000101", "20510101")
digits = get_digits(r"data/Pi - Dec - Chudnovsky.txt")
if digits:
    for date in date_list:
        position = search_in_Pi(date, digits)
        if position:
            t = (int(date), position)
            c.execute(
                "INSERT INTO BIRTHDAY (DATE,POSITION) \
                 VALUES (?, ?)",
                t,
            )
            print("success: " + date)
            conn.commit()
        else:
            print("Not found: " + date)
else:
    print("Pi file error!")

conn.commit()
conn.close()
