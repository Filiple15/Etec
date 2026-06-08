# Entrada 

idade = int(input("Informe a sua idade: "))
money = input("Você tem dinheiro guardado? informe com (S/N) ")

#Processamento e Saida
if ((idade >= 18) & (money == "S" or money == "s")):
    print(f"""
Sua idade é de {idade} e pelo visto você tambem tem um carro.
Vamos ver alguns veiculos:
-NinjaRX10
-Ronda
-Tornado

Esses são as motos disponiveis até o momento.
""")
    
elif ((idade >= 18) & (money == "N" or money == "n")):
    print(f"""
Ok você tem a idade necessaria porem ainda não tem o dinheiro.
O valor minimo em dinheiro é de 10.000 R$
""")

elif ((idade < 18) & (money == "N" or money == "n")):
    print(f"""
Ok você é menor de idade e ainda não tem dinheiro.
O melhor a se fazer é esperar e ver forma de ganhar dinheiro
""")
    
elif ((idade < 18) & (money == "S" or money == "s")):
    print(f"""
Ok você é menor de idade mas ja tem a dinheiro:
Invista o dinheiro e procure não utilizar assim você
podera ter mais dinheiro no futuro
""")
    
else:
    print("Hum por favor algo deu errado informe novamente")
