a = float(input("Informe um numero para a variavel (A): "))
b = float(input("Informe um numero para a variavel (B): "))

if ( a > b):
    print(f"O primeiro valor ({a}) é maior que o segundo valor ({b})")
elif (b > a):
    print(f"A variavel B ({b}) é maior que a variavel A ({a})")
else:
    print(f"Os dois numero são iguais !!!")