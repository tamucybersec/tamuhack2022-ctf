# Oracles
## Description
In this totally realistic RSA challenge, you have an oracle that will decode any ciphertext encoded with the given modulus
and public exponent. The only thing it won't decode is the provided ciphertext of the flag. Surely that means you can't find the flag right?

N = 333491211629271501477365324639794341720789143658693253618227753208479959926752461826087982797571415274818133539354036245466091360046907237225649219585216415835792588058788372520326236839457151426135892549871820739047523339351249049645895295896704211434702330780694673850839474185562395554754496216467

e = 65537

c = 108052892668524495684622796944939250506128420961655443894066462871225127658845357739690766635232700280256391352853318191760854344912380394597328938756399377537145055170500727661621087801459550608976493270960812340949053485898576331120654920351238336294710074667153576345129374930099991620909617961221

(when testing, only README and oracle.py are provided, contents of secrets.txt are unknown)
(the oracle uses utilities from the PyCryptodome package, can be installed with `pip install pycryptodome`)

## Solution
In the context of cryptography, an "oracle" is something (could be anything) that gives you information that you're not supposed to have. In this case, we have an oracle that tells us the plaintext of whatever ciphertext we give it. With RSA, this is insecure because we can perform a **chosen ciphertext** attack, which will allow us to decrypt the provided ciphertext without actually passing the ciphertext. I googled "rsa chosen ciphertext attack", and I found [this](https://crypto.stackexchange.com/questions/2323/how-does-a-chosen-plaintext-attack-on-rsa-work) StackExchange question with a good solution (despite what the title says, the posted answer describes a chosen ciphertext attack). Note: As CTFers, we don't need to understand the _why_ behind the math (it's interesting, though) -- we just need to write some code that implements it. 

As an overview, we know the public key (`N`, `e`) and want to decrypt `c` (the provided ciphertext). To do so, we compute a malicious ciphertext `evil_c = c * 2 ** e % N`. After sending that to the oracle for decryption, we divide the resulting plaintext `evil_p` by 2. This result is the plaintext of the _original_ ciphertext, so we just need to convert it to a human-readable format (`long_to_bytes()` does this for you), and we're done.

Here's a generalized implementation (I used `pwntools` to automate talking to the oracle, so you'll need to `pip install pwntools` if you don't have it):

```
from pwn import process
from Crypto.Util.number import long_to_bytes

io = process(["python3", "oracle.py"])
_ = io.recvline()
N = int(io.recvline().decode().split(" = ")[1])
e = int(io.recvline().decode().split(" = ")[1])
_ = io.recvline()
c = int(io.recvline().decode().split(" = ")[1])
evil_c = c * 2 ** e % N
io.clean()
io.sendline(str(evil_c))
_ = io.recvline()
evil_p = int(io.recvline().decode().split(": ")[1])
p = evil_p // 2
print(long_to_bytes(p).decode())
```

Our flag is `gigem{th3_ch0sen_0ne}`.