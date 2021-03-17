import sys
import time

from pisearch import get_digits, search_pi


def judge_birthday(number: str):
    day_in_month = {
        "01": 31,
        "02": 28,
        "03": 31,
        "04": 30,
        "05": 31,
        "06": 30,
        "07": 31,
        "08": 31,
        "09": 30,
        "10": 31,
        "11": 30,
        "12": 31,
    }
    if not (number.isdecimal()):
        return False
    if len(number) < 8:
        # number = "19" + number
        return False
    year = int(number[:4])
    month = int(number[4:6])
    day = int(number[6:])
    if (year > 2050) or (year < 1900):
        return False
    if (month > 12) or (month < 1):
        return False
    else:
        day_correct = day_in_month[number[4:6]]
        if (year % 400 == 0) or (year % 4 == 0 and year % 100 != 0):
            day_correct += 1
        if (day < 1) or (day > day_correct):
            return False
    return True


if __name__ == "__main__":
    digits = get_digits(r"data/Pi - Dec - Chudnovsky.txt")
    if digits:
        if len(sys.argv) > 1:
            date = sys.argv[1]
        else:
            print("Enter birthday (8 digits): ", end="")
            date = input()
        if judge_birthday(date) or True:
            start_time = time.time()
            position = search_pi(date, digits)
            end_time = time.time()
            print("Query takes %.2f ms" % ((end_time - start_time) * 1000.0))
            if position:
                print('position of "%s" : %s' % (date, position))
            else:
                print("Not found!")
        else:
            print("Invalid birthday!")
    else:
        print("Pi file error!")
