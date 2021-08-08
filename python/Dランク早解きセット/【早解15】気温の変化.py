# coding: utf-8
# 自分の得意な言語で
# Let's チャレンジ！！
num = input()
num_list = num.split(' ')

if int(num_list[1]) == int(num_list[0]):
    print(0)
elif int(num_list[1]) > int(num_list[0]):
    print('+', int(num_list[1]) - int(num_list[0]), sep='')
else:
    print(int(num_list[1]) - int(num_list[0]))
