# coding: utf-8
# 自分の得意な言語で
# Let's チャレンジ！！
alphabet = input()
zero_list = ['C', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z']
one_list = ['A', 'D', 'O', 'P', 'Q', 'R']
two_list = ['B']

if alphabet in zero_list:
    print(0)
elif alphabet in one_list:
    print(1)
else:
    print(2)
