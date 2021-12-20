# Lottery

## Description
Come test your luck -- if you're lucky enough, you might get a flag!

## Solution

The key thing to realize is that random number generators are in fact predictable; all successor numbers are derived from the seed. In this case we control the seed (the sum of the ascii values of our "name") which means we can seed our own random number generator with the same value and then just run it forwards. 

```bash
❯ python -c "from random import randint, seed; seed(ord('a'));print('a');print('\n'.join([str(randint(0, 1000000000)) for x in range(5)]))" | python chall.py
What's your name?
> Guess #1:
> Guess #2:
> Guess #3:
> Guess #4:
> Guess #5:
> Congratulations, a! Here's the flag: gigem{i_th0ught_r4nd1nt_w45_r4nd0m}
```