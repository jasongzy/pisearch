import re
import sys


def get_digits(path: str):
    print('Reading file: "%s" ...' % path)
    try:
        f = open(path, "r")
        lines = f.read()
        f.close()
        return lines
    except Exception as e:
        print(e)


def search_pi(number: str, digits: str):
    result = re.search(number, digits)
    if result:
        # minus 1: "3." (-2) and index start from 0 (+1)
        return result.start() - 1


def show_digits(position: int, digits: str, length: int = 20):
    if position <= 0 or length <= 0:
        return
    position += 1  # +2-1
    if (position + length) > len(digits):
        return
    else:
        return digits[position : position + length]


if __name__ == "__main__":
    if len(sys.argv) > 1:
        if len(sys.argv) == 2:  # search_pi
            date = sys.argv[1]
            if not date.isdecimal():
                print("Invalid digits!")
            else:
                digits = get_digits(r"data/Pi - Dec - Chudnovsky.txt")
                if digits:
                    position = search_pi(date, digits)
                    if position:
                        print(position)
                    else:
                        print("Not found!")
                else:
                    print("Pi file error!")
        else:  # show_digits
            position = sys.argv[1]
            length = sys.argv[2]
            if not (position.isdecimal() and length.isdecimal()):
                print("Invalid position!")
            else:
                digits = get_digits(r"data/Pi - Dec - Chudnovsky.txt")
                if digits:
                    result = show_digits(int(position), digits, int(length))
                    if result:
                        print(result)
                    else:
                        print("Invalid position!")
                else:
                    print("Pi file error!")
    else:
        print("No parameter is given!")
