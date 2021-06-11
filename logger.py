import logging
from logging import handlers
#Here the Logger is configured, which will be used to write Errors in the log file.
logger = logging.getLogger()
logger.setLevel(logging.INFO)
log_handler = handlers.RotatingFileHandler('my_log.log', maxBytes=2000, backupCount=10)
formatter = logging.Formatter('%(asctime)s - %(levelname)s - %(message)s')
log_handler.setFormatter(formatter)
logging.getLogger().addHandler(log_handler)