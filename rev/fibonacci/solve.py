xs = [
    103, 104, 114, 39, 86, 14, 82, 94, 38, 87,
    57, 26, 49, 41,27, 61, 10, 72, 63, 19,
    118, 112, 82, 14, 118, 2, 39, 123, 100, 115,
    19, 47, 60, 61, 125, 10, 114, 48, 106, 84,
    8, 127, 25, 10, 118, 58, 27, 18, 110, 84,
    36, 52, 8, 104
]

def fib(n):
    if n == 0 or n == 1:
        return n
    first = 1
    second = 1
    while (n-2):
        third = first + second
        first = second
        second = third
        n = n-1
    return third


for i, c in enumerate(xs):
    print(chr(c ^ (fib(i ** 3) & 0x7F)), end="", flush=True)