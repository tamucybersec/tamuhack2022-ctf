# Secret Number

## Description
Can you find the secret number? [webpage](http://localhost:8000/) (http://localhost:8000/).

(Setup instructions are in Setup.txt)

## Solution

Upon viewing the website we're instructed to "Find the secret number" and given a select form. It can be enumerated, but that doesn't pan out -- none of the listed numbers are the secret numbers. Fortunately for us the select box is all client side and if we have a way to make these POST requests we can just make them with whatever number we want. A quick bash one-liner later to enumerate numbers, out pops the flag. 

```bash
for i in $(seq 1 1 100); do curl -X POST http://localhost/index.php -d numbers=$i 2>/dev/null | rg gigem ; done;
```
`gigem{TraingleNumSeqNotSoSecret}`

## Developer Notes
Run `make` to start up the container on port 80. For cleanup, run `make stop`.
