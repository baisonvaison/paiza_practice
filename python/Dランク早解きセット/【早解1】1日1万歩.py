# coding: utf-8
# 自分の得意な言語で
# Let's チャレンジ！！
# 歩いた距離(km)と歩幅(cm)

a, b = map(int, input().split())
a_cm = a * 1000 * 100

if a_cm // b >= 10000:
    print('yes')
else:
    print('no')
