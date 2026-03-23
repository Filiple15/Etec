# At1 e At2 juntas

n1 = int(input("Informe um numero: "))
n2 = int(input("Informe um segundo numero: "))

soma = n1 + n2
sub = n1 - n2
div = n1 / n2
mult = n1 * n2
resto = n1 % n2
divInt = n1 // n2
expo = n1 ** n2

i = 0

print(f"""
Seus dois numero foram ({n1}) e ({n2})):

Soma: {n1} + {n2} = {soma}
Subtração: {n1} - {n2} = {sub}
Multiplicação: {n1} * {n2} = {mult}
Divisão: {n1} / {n2} = {div}

Divisão Inteira: {n1} // {n2} = {divInt}
Exponenciação: {n1} ** {n2} = {expo}
Modulo/Resto: {n1} % {n2} = {resto}
""")
