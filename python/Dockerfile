FROM  python:3.8-slim
WORKDIR /application_python
COPY requirements.txt .
RUN pip install -r requirements.txt
COPY /app /application_python/
CMD ["python", "app.py"]