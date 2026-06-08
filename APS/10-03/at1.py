# Entrada
n = int(input("Informe um numero: "))
n = abs(n)

#Processamento
valor = n % 2

# Saida
print(f"""
Ai sim em ({n}), hum sla acho que esse numero é:
""")
if (valor == 0):
    print("Par !!!")
else:
    print("IMPAR")
