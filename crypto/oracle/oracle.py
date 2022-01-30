from Crypto.Util.number import bytes_to_long, long_to_bytes

secrets = open('secrets.txt', 'r')
c, p, q = secrets.readlines()

N = int(p)*int(q)
d = pow(65537, -1, (int(p)-1)*(int(q)-1))

print('This is an RSA Oracle that decrypts things encoded with the following public key:')
print('N =', N)
print('e = 65537')
print('Also, here\'s the ciphertext for the flag:')
print('c =', c)

while True:
    ciphertext = int(input("Enter a ciphertext to decode (in decimal, like the provided ciphertext):\n"))

    if int(c) == ciphertext:
        print("not gonna decode the flag for you, that would be too easy ;)")
        continue

    m = pow(ciphertext, d, N)
    print('Here\'s your plaintext, in integer and bytes form for your convenience:')
    print('integer:', m)
    print('as a string:', long_to_bytes(m))