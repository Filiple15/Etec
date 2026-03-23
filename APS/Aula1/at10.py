produto = float("Infome o valor do produto: ")
juros = float("Informe o valor do acréscimo em porcentagem, (EX: 20, 32...): ")

adicional = produto * (juros / 100)
venda = produto + adicional

print(f"O valor da venda vai ser de: {venda}")
