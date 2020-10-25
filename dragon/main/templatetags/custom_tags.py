from django import template

register = template.Library()

@register.filter(name='porcentagem_impressora')
def porcentagem_impressora(medicao):
     impressora = medicao.impressora

     porcentagem = (impressora.cont_impressoes - medicao.contador)/impressora.cont_max_impressoes*100

     return str(porcentagem)

@register.filter(name='calcula_contador_atual')
def calcula_contador_atual(medicao):
     impressora = medicao.impressora

     contador = impressora.cont_impressoes - medicao.contador

     return str(contador)
