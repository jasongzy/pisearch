import sqlite3
import sys
import time
from date_search import judge_birthday


def query_pi(datebase: str, date: int):
    try:
        conn = sqlite3.connect(datebase)
        c = conn.cursor()
        cursor = c.execute("SELECT POSITION from BIRTHDAY where DATE=?", (date,))
        result = cursor.fetchone()
        if not result:
            return None
        conn.close()
        return result[0]
    except Exception as e:
        print(e)


if __name__ == "__main__":
    if len(sys.argv) > 1:
        date = sys.argv[1]
    else:
        print("Enter birthday (8 digits): ", end="")
        date = input()
    if judge_birthday(date):
        start_time = time.time()
        position = query_pi(r"data/pi.db", int(date))
        end_time = time.time()
        print("Query takes %.2f ms" % ((end_time - start_time) * 1000.0))
        print(position)
    else:
        print("Invalid birthday!")
