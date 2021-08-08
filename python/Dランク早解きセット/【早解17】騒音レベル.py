# coding: utf-8
# 自分の得意な言語で
# Let's チャレンジ！！
num = int(input())

if num < 30:
    print('quiet')
elif 30 <= num and num < 50:
    print('normal')
elif 50 <= num and num < 70:
    print('noisy')
else:
    print('very noisy')

