# coding: utf-8
# 自分の得意な言語で
# Let's チャレンジ！！

# 1等の場合: first
# 前後賞の場合: adjacent
# 2等の場合: second
# 3等の場合: third
# それ以外（外れ）の場合: blank

winning_num = int(input()) #当選番号
count = int(input()) #カウント

four_str_winning_num = str(winning_num)[2:6]
four_digit_winning_num = int(four_str_winning_num)
three_str_winning_num = str(winning_num)[3:6]
three_digit_winning_num = int(three_str_winning_num)

for i in range(count):
    int_num = int(input())
    four_str_num = str(int_num)[2:6]
    four_digit_num = int(four_str_num)
    three_str_num = str(int_num)[3:6]
    three_digit_num = int(three_str_num)
    
    if winning_num == int_num:
        print('first')
    elif (winning_num == (int_num + 1)) or (winning_num == (int_num - 1)):
        print('adjacent')
    elif four_digit_winning_num == four_digit_num:
        print('second')
    elif three_digit_winning_num == three_digit_num:
        print('third')
    else:
        print('blank')
