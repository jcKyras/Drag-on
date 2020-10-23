from django.db import models
import sys
from puresnmp import get

class Driver(models.Model):
    
    class Meta:
        app_label = "main"

    nome = models.CharField(max_length=255, primary_key=True)

    object = models.Manager()

class SNMPDriver(Driver):
    
    def __init__(self, comunidade, oid):
        self.comunidade = comunidade
        self.oid = oid
        self.versao = "2"

    def obter_contador(impressora):
        result = get(impressora.ip, self.comunidade, self.oid)
        return int(result)
        

class AficioMP201(SNMPDriver):
    def __init__(self):
        super.__init__(comunidade="public", oid="1.3.6.1.4.1.367.3.2.1.2.19.1.0")
    

class DriverFactory:
    @staticmethod
    def fabricarDriver(impressora):
        este_arquivo = sys.modules[__name__]
        driverClasse = getattr(este_arquivo, impressora.modelo.driver.nome)
        driver = driverClasse()
        return driver
