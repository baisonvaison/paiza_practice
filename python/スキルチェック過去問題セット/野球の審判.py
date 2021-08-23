# coding: utf-8
# 自分の得意な言語で
# Let's チャレンジ！！
count = int(input())

strike_count = 0
ball_count = 0

for i in range(count):
    str = input()
    if str == 'strike':
        if strike_count == 2:
            print('out!')
            break
        else:
            print('strike!')
        strike_count = strike_count + 1
        
    elif str == 'ball':
        if ball_count == 3:
            print('fourball!')
            break
        else:
            print('ball!')
        
        ball_count = ball_count + 1
    else:
        pass
