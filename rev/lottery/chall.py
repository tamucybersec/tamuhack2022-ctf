from random import randint, seed

name = input("What's your name?\n> ")

seed(sum(ord(c) for c in name))

if all(randint(0, 1000000000) == int(input(f"Guess #{i + 1}:\n> ")) for i in range(5)):
    with open("flag.txt") as f:
        flag = f.read()
        print(f"Congratulations, {name}! Here's the flag: {flag}")
else:
    print("Sorry, better luck next time!")
