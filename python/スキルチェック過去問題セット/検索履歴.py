# coding: utf-8
# 自分の得意な言語で
# Let's チャレンジ！！
count = int(input())
list = []

#値を配列に格納
for i in range(count):
    list.append(input())

list.reverse() #配列を反転
result_list = []

for i in range(count):
    if list[i] in result_list:
        pass
    else:
        print(list[i])
        result_list.append(list[i])
