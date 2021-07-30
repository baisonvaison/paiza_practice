# coding: utf-8
# 自分の得意な言語で
# Let's チャレンジ！！
value = input()
num = value.replace(' ', '')
num_list = num.split('+')
print(int(num_list[0]) + int(num_list[1]))
