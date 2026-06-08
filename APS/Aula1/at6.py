a = input("Informe algo: ")
b = input("Informe outra coisa: ")

ab = a
ba = b

b = ab
a = ba

print(f"No inicio o valor de A era ({ab}) e o B era ({ba})")
print(f"Agora o valor de A é ({a} e o valor de B é ({b}))")