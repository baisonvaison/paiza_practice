# coding: utf-8
# 自分の得意な言語で
# Let's チャレンジ！！
value = input()
list = value.split(' ')
count = len(list) #要素の数
result_list = []

for i in range(count):
    if list[i] in result_list:
        pass
    else:
        print(list[i], list.count(list[i]))
        result_list.append(list[i])
