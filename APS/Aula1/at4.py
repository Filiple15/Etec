nome = input("Inoforme o seu nome: ")
salario = float(input("Informe o seu salario fixo: "))
vendas = float(input("Informe as vendas efetuadas por mês em Dinheiro: "))

comissao = vendas / 0.15
bonus = salario + comissao

print(f"""
Ola como vai {nome}, percebemos que seu salario é de ({salario}).
Com base em suas vendas por esse mês podermos colocar um salario de ({})      
""")